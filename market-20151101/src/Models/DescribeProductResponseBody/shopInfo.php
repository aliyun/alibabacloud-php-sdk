<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo\telephones;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo\wangWangs;
use AlibabaCloud\Tea\Model;

class shopInfo extends Model
{
    /**
     * @example 46**41@example.com
     *
     * @var string
     */
    public $emails;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var telephones
     */
    public $telephones;

    /**
     * @var wangWangs
     */
    public $wangWangs;
    protected $_name = [
        'emails'     => 'Emails',
        'id'         => 'Id',
        'name'       => 'Name',
        'telephones' => 'Telephones',
        'wangWangs'  => 'WangWangs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emails) {
            $res['Emails'] = $this->emails;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->telephones) {
            $res['Telephones'] = null !== $this->telephones ? $this->telephones->toMap() : null;
        }
        if (null !== $this->wangWangs) {
            $res['WangWangs'] = null !== $this->wangWangs ? $this->wangWangs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shopInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Emails'])) {
            $model->emails = $map['Emails'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Telephones'])) {
            $model->telephones = telephones::fromMap($map['Telephones']);
        }
        if (isset($map['WangWangs'])) {
            $model->wangWangs = wangWangs::fromMap($map['WangWangs']);
        }

        return $model;
    }
}
