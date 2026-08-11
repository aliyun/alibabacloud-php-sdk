<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainMetasResponseBody;

use AlibabaCloud\Dara\Model;

class domainMetas extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var string
     */
    public $listId;

    /**
     * @var string
     */
    public $listType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'itemCount' => 'ItemCount',
        'listId' => 'ListId',
        'listType' => 'ListType',
        'name' => 'Name',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->itemCount) {
            $res['ItemCount'] = $this->itemCount;
        }

        if (null !== $this->listId) {
            $res['ListId'] = $this->listId;
        }

        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ItemCount'])) {
            $model->itemCount = $map['ItemCount'];
        }

        if (isset($map['ListId'])) {
            $model->listId = $map['ListId'];
        }

        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
