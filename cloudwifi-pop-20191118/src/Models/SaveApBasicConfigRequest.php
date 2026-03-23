<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SaveApBasicConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $dai;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $echoInt;

    /**
     * @var int
     */
    public $failover;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $insecureAllowed;

    /**
     * @var string
     */
    public $lanIp;

    /**
     * @var string
     */
    public $lanMask;

    /**
     * @var int
     */
    public $lanStatus;

    /**
     * @var string
     */
    public $logIp;

    /**
     * @var int
     */
    public $logLevel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $passwd;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $route;

    /**
     * @var int
     */
    public $scan;

    /**
     * @var string
     */
    public $tokenServer;

    /**
     * @var string
     */
    public $vpn;

    /**
     * @var int
     */
    public $workMode;
    protected $_name = [
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'country' => 'Country',
        'dai' => 'Dai',
        'description' => 'Description',
        'echoInt' => 'EchoInt',
        'failover' => 'Failover',
        'id' => 'Id',
        'insecureAllowed' => 'InsecureAllowed',
        'lanIp' => 'LanIp',
        'lanMask' => 'LanMask',
        'lanStatus' => 'LanStatus',
        'logIp' => 'LogIp',
        'logLevel' => 'LogLevel',
        'name' => 'Name',
        'passwd' => 'Passwd',
        'protocol' => 'Protocol',
        'route' => 'Route',
        'scan' => 'Scan',
        'tokenServer' => 'TokenServer',
        'vpn' => 'Vpn',
        'workMode' => 'WorkMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->dai) {
            $res['Dai'] = $this->dai;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->echoInt) {
            $res['EchoInt'] = $this->echoInt;
        }

        if (null !== $this->failover) {
            $res['Failover'] = $this->failover;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->insecureAllowed) {
            $res['InsecureAllowed'] = $this->insecureAllowed;
        }

        if (null !== $this->lanIp) {
            $res['LanIp'] = $this->lanIp;
        }

        if (null !== $this->lanMask) {
            $res['LanMask'] = $this->lanMask;
        }

        if (null !== $this->lanStatus) {
            $res['LanStatus'] = $this->lanStatus;
        }

        if (null !== $this->logIp) {
            $res['LogIp'] = $this->logIp;
        }

        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->passwd) {
            $res['Passwd'] = $this->passwd;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }

        if (null !== $this->scan) {
            $res['Scan'] = $this->scan;
        }

        if (null !== $this->tokenServer) {
            $res['TokenServer'] = $this->tokenServer;
        }

        if (null !== $this->vpn) {
            $res['Vpn'] = $this->vpn;
        }

        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['Dai'])) {
            $model->dai = $map['Dai'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EchoInt'])) {
            $model->echoInt = $map['EchoInt'];
        }

        if (isset($map['Failover'])) {
            $model->failover = $map['Failover'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InsecureAllowed'])) {
            $model->insecureAllowed = $map['InsecureAllowed'];
        }

        if (isset($map['LanIp'])) {
            $model->lanIp = $map['LanIp'];
        }

        if (isset($map['LanMask'])) {
            $model->lanMask = $map['LanMask'];
        }

        if (isset($map['LanStatus'])) {
            $model->lanStatus = $map['LanStatus'];
        }

        if (isset($map['LogIp'])) {
            $model->logIp = $map['LogIp'];
        }

        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Passwd'])) {
            $model->passwd = $map['Passwd'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Route'])) {
            $model->route = $map['Route'];
        }

        if (isset($map['Scan'])) {
            $model->scan = $map['Scan'];
        }

        if (isset($map['TokenServer'])) {
            $model->tokenServer = $map['TokenServer'];
        }

        if (isset($map['Vpn'])) {
            $model->vpn = $map['Vpn'];
        }

        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
