<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest\grantCommand\devFieldList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest\grantCommand\prodFieldList;

class grantCommand extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var bool
     */
    public $applyDev;

    /**
     * @var bool
     */
    public $applyProd;

    /**
     * @var string[]
     */
    public $authTypes;

    /**
     * @var devFieldList[]
     */
    public $devFieldList;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $granteeType;

    /**
     * @var prodFieldList[]
     */
    public $prodFieldList;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'apiId' => 'ApiId',
        'appId' => 'AppId',
        'applyDev' => 'ApplyDev',
        'applyProd' => 'ApplyProd',
        'authTypes' => 'AuthTypes',
        'devFieldList' => 'DevFieldList',
        'expireDate' => 'ExpireDate',
        'granteeType' => 'GranteeType',
        'prodFieldList' => 'ProdFieldList',
        'reason' => 'Reason',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->authTypes)) {
            Model::validateArray($this->authTypes);
        }
        if (\is_array($this->devFieldList)) {
            Model::validateArray($this->devFieldList);
        }
        if (\is_array($this->prodFieldList)) {
            Model::validateArray($this->prodFieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->applyDev) {
            $res['ApplyDev'] = $this->applyDev;
        }

        if (null !== $this->applyProd) {
            $res['ApplyProd'] = $this->applyProd;
        }

        if (null !== $this->authTypes) {
            if (\is_array($this->authTypes)) {
                $res['AuthTypes'] = [];
                $n1 = 0;
                foreach ($this->authTypes as $item1) {
                    $res['AuthTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->devFieldList) {
            if (\is_array($this->devFieldList)) {
                $res['DevFieldList'] = [];
                $n1 = 0;
                foreach ($this->devFieldList as $item1) {
                    $res['DevFieldList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->granteeType) {
            $res['GranteeType'] = $this->granteeType;
        }

        if (null !== $this->prodFieldList) {
            if (\is_array($this->prodFieldList)) {
                $res['ProdFieldList'] = [];
                $n1 = 0;
                foreach ($this->prodFieldList as $item1) {
                    $res['ProdFieldList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ApplyDev'])) {
            $model->applyDev = $map['ApplyDev'];
        }

        if (isset($map['ApplyProd'])) {
            $model->applyProd = $map['ApplyProd'];
        }

        if (isset($map['AuthTypes'])) {
            if (!empty($map['AuthTypes'])) {
                $model->authTypes = [];
                $n1 = 0;
                foreach ($map['AuthTypes'] as $item1) {
                    $model->authTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DevFieldList'])) {
            if (!empty($map['DevFieldList'])) {
                $model->devFieldList = [];
                $n1 = 0;
                foreach ($map['DevFieldList'] as $item1) {
                    $model->devFieldList[$n1] = devFieldList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['GranteeType'])) {
            $model->granteeType = $map['GranteeType'];
        }

        if (isset($map['ProdFieldList'])) {
            if (!empty($map['ProdFieldList'])) {
                $model->prodFieldList = [];
                $n1 = 0;
                foreach ($map['ProdFieldList'] as $item1) {
                    $model->prodFieldList[$n1] = prodFieldList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
