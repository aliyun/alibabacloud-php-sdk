<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSecuritySecretKeyResponseBody;

use AlibabaCloud\Dara\Model;

class securitySecretKeyInfo extends Model
{
    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $algorithmTypeAlias;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableOpenapiQuery;

    /**
     * @var string
     */
    public $generationType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isOwnerManageOnly;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string[]
     */
    public $secretKeyList;

    /**
     * @var int
     */
    public $subKeyCount;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'algorithmType' => 'AlgorithmType',
        'algorithmTypeAlias' => 'AlgorithmTypeAlias',
        'description' => 'Description',
        'enableOpenapiQuery' => 'EnableOpenapiQuery',
        'generationType' => 'GenerationType',
        'id' => 'Id',
        'isOwnerManageOnly' => 'IsOwnerManageOnly',
        'name' => 'Name',
        'owner' => 'Owner',
        'ownerName' => 'OwnerName',
        'secretKeyList' => 'SecretKeyList',
        'subKeyCount' => 'SubKeyCount',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->secretKeyList)) {
            Model::validateArray($this->secretKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }

        if (null !== $this->algorithmTypeAlias) {
            $res['AlgorithmTypeAlias'] = $this->algorithmTypeAlias;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableOpenapiQuery) {
            $res['EnableOpenapiQuery'] = $this->enableOpenapiQuery;
        }

        if (null !== $this->generationType) {
            $res['GenerationType'] = $this->generationType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isOwnerManageOnly) {
            $res['IsOwnerManageOnly'] = $this->isOwnerManageOnly;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->secretKeyList) {
            if (\is_array($this->secretKeyList)) {
                $res['SecretKeyList'] = [];
                $n1 = 0;
                foreach ($this->secretKeyList as $item1) {
                    $res['SecretKeyList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subKeyCount) {
            $res['SubKeyCount'] = $this->subKeyCount;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }

        if (isset($map['AlgorithmTypeAlias'])) {
            $model->algorithmTypeAlias = $map['AlgorithmTypeAlias'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableOpenapiQuery'])) {
            $model->enableOpenapiQuery = $map['EnableOpenapiQuery'];
        }

        if (isset($map['GenerationType'])) {
            $model->generationType = $map['GenerationType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsOwnerManageOnly'])) {
            $model->isOwnerManageOnly = $map['IsOwnerManageOnly'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['SecretKeyList'])) {
            if (!empty($map['SecretKeyList'])) {
                $model->secretKeyList = [];
                $n1 = 0;
                foreach ($map['SecretKeyList'] as $item1) {
                    $model->secretKeyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubKeyCount'])) {
            $model->subKeyCount = $map['SubKeyCount'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
