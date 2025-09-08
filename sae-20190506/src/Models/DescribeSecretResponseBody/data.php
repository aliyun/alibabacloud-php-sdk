<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSecretResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSecretResponseBody\data\relateApps;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var relateApps[]
     */
    public $relateApps;

    /**
     * @var string[]
     */
    public $secretData;

    /**
     * @var int
     */
    public $secretId;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'namespaceId' => 'NamespaceId',
        'relateApps' => 'RelateApps',
        'secretData' => 'SecretData',
        'secretId' => 'SecretId',
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->relateApps)) {
            Model::validateArray($this->relateApps);
        }
        if (\is_array($this->secretData)) {
            Model::validateArray($this->secretData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->relateApps) {
            if (\is_array($this->relateApps)) {
                $res['RelateApps'] = [];
                $n1 = 0;
                foreach ($this->relateApps as $item1) {
                    $res['RelateApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secretData) {
            if (\is_array($this->secretData)) {
                $res['SecretData'] = [];
                foreach ($this->secretData as $key1 => $value1) {
                    $res['SecretData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['RelateApps'])) {
            if (!empty($map['RelateApps'])) {
                $model->relateApps = [];
                $n1 = 0;
                foreach ($map['RelateApps'] as $item1) {
                    $model->relateApps[$n1] = relateApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecretData'])) {
            if (!empty($map['SecretData'])) {
                $model->secretData = [];
                foreach ($map['SecretData'] as $key1 => $value1) {
                    $model->secretData[$key1] = $value1;
                }
            }
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
