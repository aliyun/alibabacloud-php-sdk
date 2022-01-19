<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAttackEventResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtCreateStamp;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $vmIp;
    protected $_name = [
        'attackType'     => 'AttackType',
        'gmtCreate'      => 'GmtCreate',
        'gmtCreateStamp' => 'GmtCreateStamp',
        'gmtModified'    => 'GmtModified',
        'sourceIp'       => 'SourceIp',
        'url'            => 'Url',
        'vmIp'           => 'VmIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateStamp) {
            $res['GmtCreateStamp'] = $this->gmtCreateStamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->vmIp) {
            $res['VmIp'] = $this->vmIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateStamp'])) {
            $model->gmtCreateStamp = $map['GmtCreateStamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['VmIp'])) {
            $model->vmIp = $map['VmIp'];
        }

        return $model;
    }
}
