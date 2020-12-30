<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeEmgVulGroupResponseBody;

use AlibabaCloud\Tea\Model;

class emgVulGroupList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtPublish;

    /**
     * @var int
     */
    public $pendingCount;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'type'         => 'Type',
        'description'  => 'Description',
        'gmtPublish'   => 'GmtPublish',
        'pendingCount' => 'PendingCount',
        'aliasName'    => 'AliasName',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtPublish) {
            $res['GmtPublish'] = $this->gmtPublish;
        }
        if (null !== $this->pendingCount) {
            $res['PendingCount'] = $this->pendingCount;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emgVulGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtPublish'])) {
            $model->gmtPublish = $map['GmtPublish'];
        }
        if (isset($map['PendingCount'])) {
            $model->pendingCount = $map['PendingCount'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
