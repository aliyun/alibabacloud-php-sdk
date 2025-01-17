<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetCloudAssetSummaryRequest extends Model
{
    /**
     * @var int[]
     */
    public $vendors;
    protected $_name = [
        'vendors' => 'Vendors',
    ];

    public function validate()
    {
        if (\is_array($this->vendors)) {
            Model::validateArray($this->vendors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vendors) {
            if (\is_array($this->vendors)) {
                $res['Vendors'] = [];
                $n1             = 0;
                foreach ($this->vendors as $item1) {
                    $res['Vendors'][$n1++] = $item1;
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
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = [];
                $n1             = 0;
                foreach ($map['Vendors'] as $item1) {
                    $model->vendors[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
