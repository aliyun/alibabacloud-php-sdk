<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesResponseBody;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\ListWebHostingFilesResponseBody\data\webHostingFiles;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var webHostingFiles[]
     */
    public $webHostingFiles;

    /**
     * @var string
     */
    public $nextMarker;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'webHostingFiles' => 'WebHostingFiles',
        'nextMarker'      => 'NextMarker',
        'count'           => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webHostingFiles) {
            $res['WebHostingFiles'] = [];
            if (null !== $this->webHostingFiles && \is_array($this->webHostingFiles)) {
                $n = 0;
                foreach ($this->webHostingFiles as $item) {
                    $res['WebHostingFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextMarker) {
            $res['NextMarker'] = $this->nextMarker;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebHostingFiles'])) {
            if (!empty($map['WebHostingFiles'])) {
                $model->webHostingFiles = [];
                $n                      = 0;
                foreach ($map['WebHostingFiles'] as $item) {
                    $model->webHostingFiles[$n++] = null !== $item ? webHostingFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextMarker'])) {
            $model->nextMarker = $map['NextMarker'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
