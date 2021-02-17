<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody\releaseNotes\releaseNote;
use AlibabaCloud\Tea\Model;

class releaseNotes extends Model
{
    /**
     * @var releaseNote[]
     */
    public $releaseNote;
    protected $_name = [
        'releaseNote' => 'ReleaseNote',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = [];
            if (null !== $this->releaseNote && \is_array($this->releaseNote)) {
                $n = 0;
                foreach ($this->releaseNote as $item) {
                    $res['ReleaseNote'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseNotes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseNote'])) {
            if (!empty($map['ReleaseNote'])) {
                $model->releaseNote = [];
                $n                  = 0;
                foreach ($map['ReleaseNote'] as $item) {
                    $model->releaseNote[$n++] = null !== $item ? releaseNote::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
