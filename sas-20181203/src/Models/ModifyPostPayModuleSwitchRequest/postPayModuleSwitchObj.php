<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPostPayModuleSwitchRequest;

use AlibabaCloud\Dara\Model;

class postPayModuleSwitchObj extends Model
{
    /**
     * @var int
     */
    public $agentless;

    /**
     * @var int
     */
    public $antiRansomware;

    /**
     * @var int
     */
    public $basicService;

    /**
     * @var int
     */
    public $cspm;

    /**
     * @var int
     */
    public $ctdr;

    /**
     * @var int
     */
    public $ctdrStorage;

    /**
     * @var int
     */
    public $postHost;

    /**
     * @var int
     */
    public $rasp;

    /**
     * @var int
     */
    public $sdk;

    /**
     * @var int
     */
    public $serverless;

    /**
     * @var int
     */
    public $vul;

    /**
     * @var int
     */
    public $webLock;
    protected $_name = [
        'agentless' => 'Agentless',
        'antiRansomware' => 'AntiRansomware',
        'basicService' => 'BasicService',
        'cspm' => 'Cspm',
        'ctdr' => 'Ctdr',
        'ctdrStorage' => 'CtdrStorage',
        'postHost' => 'PostHost',
        'rasp' => 'Rasp',
        'sdk' => 'Sdk',
        'serverless' => 'Serverless',
        'vul' => 'Vul',
        'webLock' => 'WebLock',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentless) {
            $res['Agentless'] = $this->agentless;
        }

        if (null !== $this->antiRansomware) {
            $res['AntiRansomware'] = $this->antiRansomware;
        }

        if (null !== $this->basicService) {
            $res['BasicService'] = $this->basicService;
        }

        if (null !== $this->cspm) {
            $res['Cspm'] = $this->cspm;
        }

        if (null !== $this->ctdr) {
            $res['Ctdr'] = $this->ctdr;
        }

        if (null !== $this->ctdrStorage) {
            $res['CtdrStorage'] = $this->ctdrStorage;
        }

        if (null !== $this->postHost) {
            $res['PostHost'] = $this->postHost;
        }

        if (null !== $this->rasp) {
            $res['Rasp'] = $this->rasp;
        }

        if (null !== $this->sdk) {
            $res['Sdk'] = $this->sdk;
        }

        if (null !== $this->serverless) {
            $res['Serverless'] = $this->serverless;
        }

        if (null !== $this->vul) {
            $res['Vul'] = $this->vul;
        }

        if (null !== $this->webLock) {
            $res['WebLock'] = $this->webLock;
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
        if (isset($map['Agentless'])) {
            $model->agentless = $map['Agentless'];
        }

        if (isset($map['AntiRansomware'])) {
            $model->antiRansomware = $map['AntiRansomware'];
        }

        if (isset($map['BasicService'])) {
            $model->basicService = $map['BasicService'];
        }

        if (isset($map['Cspm'])) {
            $model->cspm = $map['Cspm'];
        }

        if (isset($map['Ctdr'])) {
            $model->ctdr = $map['Ctdr'];
        }

        if (isset($map['CtdrStorage'])) {
            $model->ctdrStorage = $map['CtdrStorage'];
        }

        if (isset($map['PostHost'])) {
            $model->postHost = $map['PostHost'];
        }

        if (isset($map['Rasp'])) {
            $model->rasp = $map['Rasp'];
        }

        if (isset($map['Sdk'])) {
            $model->sdk = $map['Sdk'];
        }

        if (isset($map['Serverless'])) {
            $model->serverless = $map['Serverless'];
        }

        if (isset($map['Vul'])) {
            $model->vul = $map['Vul'];
        }

        if (isset($map['WebLock'])) {
            $model->webLock = $map['WebLock'];
        }

        return $model;
    }
}
