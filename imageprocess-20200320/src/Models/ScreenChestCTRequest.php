<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTRequest\URLList;

class ScreenChestCTRequest extends Model
{
    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var int
     */
    public $mask;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var URLList[]
     */
    public $URLList;

    /**
     * @var int
     */
    public $verbose;
    protected $_name = [
        'dataFormat' => 'DataFormat',
        'mask' => 'Mask',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'URLList' => 'URLList',
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                $n1 = 0;
                foreach ($this->URLList as $item1) {
                    $res['URLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
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
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n1 = 0;
                foreach ($map['URLList'] as $item1) {
                    $model->URLList[$n1++] = URLList::fromMap($item1);
                }
            }
        }

        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
