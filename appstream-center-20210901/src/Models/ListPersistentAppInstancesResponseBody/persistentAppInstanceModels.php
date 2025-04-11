<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class persistentAppInstanceModels extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @var string
     */
    public $appInstancePersistentName;

    /**
     * @var string
     */
    public $appInstancePersistentStatus;

    /**
     * @var string
     */
    public $appInstanceStatus;

    /**
     * @var string[]
     */
    public $authorizedUsers;

    /**
     * @var string
     */
    public $gmtCreate;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'appInstancePersistentName' => 'AppInstancePersistentName',
        'appInstancePersistentStatus' => 'AppInstancePersistentStatus',
        'appInstanceStatus' => 'AppInstanceStatus',
        'authorizedUsers' => 'AuthorizedUsers',
        'gmtCreate' => 'GmtCreate',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedUsers)) {
            Model::validateArray($this->authorizedUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }

        if (null !== $this->appInstancePersistentName) {
            $res['AppInstancePersistentName'] = $this->appInstancePersistentName;
        }

        if (null !== $this->appInstancePersistentStatus) {
            $res['AppInstancePersistentStatus'] = $this->appInstancePersistentStatus;
        }

        if (null !== $this->appInstanceStatus) {
            $res['AppInstanceStatus'] = $this->appInstanceStatus;
        }

        if (null !== $this->authorizedUsers) {
            if (\is_array($this->authorizedUsers)) {
                $res['AuthorizedUsers'] = [];
                $n1 = 0;
                foreach ($this->authorizedUsers as $item1) {
                    $res['AuthorizedUsers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }

        if (isset($map['AppInstancePersistentName'])) {
            $model->appInstancePersistentName = $map['AppInstancePersistentName'];
        }

        if (isset($map['AppInstancePersistentStatus'])) {
            $model->appInstancePersistentStatus = $map['AppInstancePersistentStatus'];
        }

        if (isset($map['AppInstanceStatus'])) {
            $model->appInstanceStatus = $map['AppInstanceStatus'];
        }

        if (isset($map['AuthorizedUsers'])) {
            if (!empty($map['AuthorizedUsers'])) {
                $model->authorizedUsers = [];
                $n1 = 0;
                foreach ($map['AuthorizedUsers'] as $item1) {
                    $model->authorizedUsers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        return $model;
    }
}
