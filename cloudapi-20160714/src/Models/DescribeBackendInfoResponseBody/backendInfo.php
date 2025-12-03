<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels;

class backendInfo extends Model
{
    /**
     * @var string
     */
    public $backendId;

    /**
     * @var backendModels[]
     */
    public $backendModels;

    /**
     * @var string
     */
    public $backendName;

    /**
     * @var string
     */
    public $backendType;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'backendId' => 'BackendId',
        'backendModels' => 'BackendModels',
        'backendName' => 'BackendName',
        'backendType' => 'BackendType',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
        if (\is_array($this->backendModels)) {
            Model::validateArray($this->backendModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }

        if (null !== $this->backendModels) {
            if (\is_array($this->backendModels)) {
                $res['BackendModels'] = [];
                $n1 = 0;
                foreach ($this->backendModels as $item1) {
                    $res['BackendModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backendName) {
            $res['BackendName'] = $this->backendName;
        }

        if (null !== $this->backendType) {
            $res['BackendType'] = $this->backendType;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }

        if (isset($map['BackendModels'])) {
            if (!empty($map['BackendModels'])) {
                $model->backendModels = [];
                $n1 = 0;
                foreach ($map['BackendModels'] as $item1) {
                    $model->backendModels[$n1] = backendModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BackendName'])) {
            $model->backendName = $map['BackendName'];
        }

        if (isset($map['BackendType'])) {
            $model->backendType = $map['BackendType'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
