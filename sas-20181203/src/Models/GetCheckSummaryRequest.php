<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetCheckSummaryRequest extends Model
{
    /**
     * @var bool
     */
    public $isItemStatistic;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $resourceDirectoryAccountId;
    /**
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'isItemStatistic'            => 'IsItemStatistic',
        'lang'                       => 'Lang',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'vendors'                    => 'Vendors',
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
        if (null !== $this->isItemStatistic) {
            $res['IsItemStatistic'] = $this->isItemStatistic;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

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
        if (isset($map['IsItemStatistic'])) {
            $model->isItemStatistic = $map['IsItemStatistic'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

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
