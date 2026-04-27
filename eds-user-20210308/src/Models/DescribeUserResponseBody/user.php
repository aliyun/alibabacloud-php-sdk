<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserResponseBody\user\externalInfo;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUserResponseBody\user\properties;

class user extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @var string[]
     */
    public $extras;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string[]
     */
    public $orgIds;

    /**
     * @var string[]
     */
    public $orgPaths;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'externalInfo' => 'ExternalInfo',
        'extras' => 'Extras',
        'gmtCreate' => 'GmtCreate',
        'orgIds' => 'OrgIds',
        'orgPaths' => 'OrgPaths',
        'phone' => 'Phone',
        'properties' => 'Properties',
        'remark' => 'Remark',
        'status' => 'Status',
        'wyId' => 'WyId',
    ];

    public function validate()
    {
        if (null !== $this->externalInfo) {
            $this->externalInfo->validate();
        }
        if (\is_array($this->extras)) {
            Model::validateArray($this->extras);
        }
        if (\is_array($this->orgIds)) {
            Model::validateArray($this->orgIds);
        }
        if (\is_array($this->orgPaths)) {
            Model::validateArray($this->orgPaths);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = null !== $this->externalInfo ? $this->externalInfo->toArray($noStream) : $this->externalInfo;
        }

        if (null !== $this->extras) {
            if (\is_array($this->extras)) {
                $res['Extras'] = [];
                foreach ($this->extras as $key1 => $value1) {
                    $res['Extras'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->orgIds) {
            if (\is_array($this->orgIds)) {
                $res['OrgIds'] = [];
                $n1 = 0;
                foreach ($this->orgIds as $item1) {
                    $res['OrgIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orgPaths) {
            if (\is_array($this->orgPaths)) {
                $res['OrgPaths'] = [];
                $n1 = 0;
                foreach ($this->orgPaths as $item1) {
                    $res['OrgPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['Properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = externalInfo::fromMap($map['ExternalInfo']);
        }

        if (isset($map['Extras'])) {
            if (!empty($map['Extras'])) {
                $model->extras = [];
                foreach ($map['Extras'] as $key1 => $value1) {
                    $model->extras[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['OrgIds'])) {
            if (!empty($map['OrgIds'])) {
                $model->orgIds = [];
                $n1 = 0;
                foreach ($map['OrgIds'] as $item1) {
                    $model->orgIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OrgPaths'])) {
            if (!empty($map['OrgPaths'])) {
                $model->orgPaths = [];
                $n1 = 0;
                foreach ($map['OrgPaths'] as $item1) {
                    $model->orgPaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['Properties'] as $item1) {
                    $model->properties[$n1] = properties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
