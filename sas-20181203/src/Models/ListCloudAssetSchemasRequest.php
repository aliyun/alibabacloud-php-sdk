<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudAssetSchemasRequest\cloudAssetTypes;

class ListCloudAssetSchemasRequest extends Model
{
    /**
     * @var bool
     */
    public $associatedDataOnly;

    /**
     * @var cloudAssetTypes[]
     */
    public $cloudAssetTypes;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $dataNames;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'associatedDataOnly' => 'AssociatedDataOnly',
        'cloudAssetTypes' => 'CloudAssetTypes',
        'currentPage' => 'CurrentPage',
        'dataNames' => 'DataNames',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->cloudAssetTypes)) {
            Model::validateArray($this->cloudAssetTypes);
        }
        if (\is_array($this->dataNames)) {
            Model::validateArray($this->dataNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedDataOnly) {
            $res['AssociatedDataOnly'] = $this->associatedDataOnly;
        }

        if (null !== $this->cloudAssetTypes) {
            if (\is_array($this->cloudAssetTypes)) {
                $res['CloudAssetTypes'] = [];
                $n1 = 0;
                foreach ($this->cloudAssetTypes as $item1) {
                    $res['CloudAssetTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dataNames) {
            if (\is_array($this->dataNames)) {
                $res['DataNames'] = [];
                $n1 = 0;
                foreach ($this->dataNames as $item1) {
                    $res['DataNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AssociatedDataOnly'])) {
            $model->associatedDataOnly = $map['AssociatedDataOnly'];
        }

        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n1 = 0;
                foreach ($map['CloudAssetTypes'] as $item1) {
                    $model->cloudAssetTypes[$n1] = cloudAssetTypes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DataNames'])) {
            if (!empty($map['DataNames'])) {
                $model->dataNames = [];
                $n1 = 0;
                foreach ($map['DataNames'] as $item1) {
                    $model->dataNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
