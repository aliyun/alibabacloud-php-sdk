<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetSmsConfigResponseBody\smsConfigs;

use AlibabaCloud\Tea\Model;

class smsConfig extends Model
{
    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $scenario;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'instance'     => 'Instance',
        'description'  => 'Description',
        'templateCode' => 'TemplateCode',
        'gmtCreate'    => 'GmtCreate',
        'scenario'     => 'Scenario',
        'gmtModified'  => 'GmtModified',
        'name'         => 'Name',
        'extra'        => 'Extra',
        'signName'     => 'SignName',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
