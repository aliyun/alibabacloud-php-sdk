<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCrowdsResponseBody;

use AlibabaCloud\Tea\Model;

class crowds extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $crowdId;

    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example os=android
     *
     * @var string
     */
    public $label;

    /**
     * @example crowd1
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var string
     */
    public $quantity;

    /**
     * @example ManualInput
     *
     * @var string
     */
    public $source;

    /**
     * @example user1,user2
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'crowdId'       => 'CrowdId',
        'description'   => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'label'         => 'Label',
        'name'          => 'Name',
        'quantity'      => 'Quantity',
        'source'        => 'Source',
        'users'         => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crowdId) {
            $res['CrowdId'] = $this->crowdId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return crowds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrowdId'])) {
            $model->crowdId = $map['CrowdId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
