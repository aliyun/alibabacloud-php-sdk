<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponse\data\fileSummary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var fileSummary[]
     */
    public $fileSummary;
    protected $_name = [
        'fileSummary' => 'FileSummary',
    ];

    public function validate()
    {
        Model::validateRequired('fileSummary', $this->fileSummary, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSummary) {
            $res['FileSummary'] = [];
            if (null !== $this->fileSummary && \is_array($this->fileSummary)) {
                $n = 0;
                foreach ($this->fileSummary as $item) {
                    $res['FileSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FileSummary'])) {
            if (!empty($map['FileSummary'])) {
                $model->fileSummary = [];
                $n                  = 0;
                foreach ($map['FileSummary'] as $item) {
                    $model->fileSummary[$n++] = null !== $item ? fileSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
