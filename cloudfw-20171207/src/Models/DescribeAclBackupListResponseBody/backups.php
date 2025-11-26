<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclBackupListResponseBody;

use AlibabaCloud\Dara\Model;

class backups extends Model
{
    /**
     * @var int
     */
    public $aclCount;

    /**
     * @var int
     */
    public $backUpTime;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'aclCount' => 'AclCount',
        'backUpTime' => 'BackUpTime',
        'description' => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclCount) {
            $res['AclCount'] = $this->aclCount;
        }

        if (null !== $this->backUpTime) {
            $res['BackUpTime'] = $this->backUpTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['AclCount'])) {
            $model->aclCount = $map['AclCount'];
        }

        if (isset($map['BackUpTime'])) {
            $model->backUpTime = $map['BackUpTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
