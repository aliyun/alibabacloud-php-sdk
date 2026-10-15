<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListAuthConfigByResourceResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $authorities;

    /**
     * @var string
     */
    public $authorizedId;

    /**
     * @var string
     */
    public $authorizedName;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $scope;
    protected $_name = [
        'authorities' => 'Authorities',
        'authorizedId' => 'AuthorizedId',
        'authorizedName' => 'AuthorizedName',
        'expireDate' => 'ExpireDate',
        'gmtCreate' => 'GmtCreate',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->authorities)) {
            Model::validateArray($this->authorities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorities) {
            if (\is_array($this->authorities)) {
                $res['Authorities'] = [];
                $n1 = 0;
                foreach ($this->authorities as $item1) {
                    $res['Authorities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authorizedId) {
            $res['AuthorizedId'] = $this->authorizedId;
        }

        if (null !== $this->authorizedName) {
            $res['AuthorizedName'] = $this->authorizedName;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['Authorities'])) {
            if (!empty($map['Authorities'])) {
                $model->authorities = [];
                $n1 = 0;
                foreach ($map['Authorities'] as $item1) {
                    $model->authorities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthorizedId'])) {
            $model->authorizedId = $map['AuthorizedId'];
        }

        if (isset($map['AuthorizedName'])) {
            $model->authorizedName = $map['AuthorizedName'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
