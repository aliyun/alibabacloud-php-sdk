<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiTrafficResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiTrafficResponseBody\uploads\upload;
use AlibabaCloud\Tea\Model;

class uploads extends Model
{
    /**
     * @var upload[]
     */
    public $upload;
    protected $_name = [
        'upload' => 'Upload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upload) {
            $res['Upload'] = [];
            if (null !== $this->upload && \is_array($this->upload)) {
                $n = 0;
                foreach ($this->upload as $item) {
                    $res['Upload'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uploads
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Upload'])) {
            if (!empty($map['Upload'])) {
                $model->upload = [];
                $n             = 0;
                foreach ($map['Upload'] as $item) {
                    $model->upload[$n++] = null !== $item ? upload::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
