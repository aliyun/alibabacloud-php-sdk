<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponseBody\data\fileSummary;

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
        if (\is_array($this->fileSummary)) {
            Model::validateArray($this->fileSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSummary) {
            if (\is_array($this->fileSummary)) {
                $res['FileSummary'] = [];
                $n1 = 0;
                foreach ($this->fileSummary as $item1) {
                    $res['FileSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSummary'])) {
            if (!empty($map['FileSummary'])) {
                $model->fileSummary = [];
                $n1 = 0;
                foreach ($map['FileSummary'] as $item1) {
                    $model->fileSummary[$n1] = fileSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
