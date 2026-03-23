<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SaveApgroupSsidConfigRequest extends Model
{
    /**
     * @var int
     */
    public $acctPort;

    /**
     * @var string
     */
    public $acctSecret;

    /**
     * @var string
     */
    public $acctServer;

    /**
     * @var string
     */
    public $apgroupId;

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
    public $authCache;

    /**
     * @var int
     */
    public $authPort;

    /**
     * @var string
     */
    public $authSecret;

    /**
     * @var string
     */
    public $authServer;

    /**
     * @var string
     */
    public $binding;

    /**
     * @var int
     */
    public $cir;

    /**
     * @var string
     */
    public $daeClient;

    /**
     * @var int
     */
    public $daePort;

    /**
     * @var string
     */
    public $daeSecret;

    /**
     * @var string
     */
    public $disabled;

    /**
     * @var string
     */
    public $disassocLowAck;

    /**
     * @var int
     */
    public $disassocWeakRssi;

    /**
     * @var int
     */
    public $dynamicVlan;

    /**
     * @var bool
     */
    public $effect;

    /**
     * @var string
     */
    public $encKey;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $hidden;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ieee80211w;

    /**
     * @var int
     */
    public $ignoreWeakProbe;

    /**
     * @var string
     */
    public $isolate;

    /**
     * @var bool
     */
    public $liteEffect;

    /**
     * @var int
     */
    public $maxInactivity;

    /**
     * @var string
     */
    public $maxassoc;

    /**
     * @var int
     */
    public $multicastForward;

    /**
     * @var string
     */
    public $nasid;

    /**
     * @var int
     */
    public $network;

    /**
     * @var string
     */
    public $newSsid;

    /**
     * @var string
     */
    public $ownip;

    /**
     * @var int
     */
    public $secondaryAcctPort;

    /**
     * @var string
     */
    public $secondaryAcctSecret;

    /**
     * @var string
     */
    public $secondaryAcctServer;

    /**
     * @var int
     */
    public $secondaryAuthPort;

    /**
     * @var string
     */
    public $secondaryAuthSecret;

    /**
     * @var string
     */
    public $secondaryAuthServer;

    /**
     * @var string
     */
    public $shortPreamble;

    /**
     * @var string
     */
    public $ssid;

    /**
     * @var int
     */
    public $ssidLb;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $vlanDhcp;

    /**
     * @var string
     */
    public $wmm;
    protected $_name = [
        'acctPort' => 'AcctPort',
        'acctSecret' => 'AcctSecret',
        'acctServer' => 'AcctServer',
        'apgroupId' => 'ApgroupId',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'authCache' => 'AuthCache',
        'authPort' => 'AuthPort',
        'authSecret' => 'AuthSecret',
        'authServer' => 'AuthServer',
        'binding' => 'Binding',
        'cir' => 'Cir',
        'daeClient' => 'DaeClient',
        'daePort' => 'DaePort',
        'daeSecret' => 'DaeSecret',
        'disabled' => 'Disabled',
        'disassocLowAck' => 'DisassocLowAck',
        'disassocWeakRssi' => 'DisassocWeakRssi',
        'dynamicVlan' => 'DynamicVlan',
        'effect' => 'Effect',
        'encKey' => 'EncKey',
        'encryption' => 'Encryption',
        'hidden' => 'Hidden',
        'id' => 'Id',
        'ieee80211w' => 'Ieee80211w',
        'ignoreWeakProbe' => 'IgnoreWeakProbe',
        'isolate' => 'Isolate',
        'liteEffect' => 'LiteEffect',
        'maxInactivity' => 'MaxInactivity',
        'maxassoc' => 'Maxassoc',
        'multicastForward' => 'MulticastForward',
        'nasid' => 'Nasid',
        'network' => 'Network',
        'newSsid' => 'NewSsid',
        'ownip' => 'Ownip',
        'secondaryAcctPort' => 'SecondaryAcctPort',
        'secondaryAcctSecret' => 'SecondaryAcctSecret',
        'secondaryAcctServer' => 'SecondaryAcctServer',
        'secondaryAuthPort' => 'SecondaryAuthPort',
        'secondaryAuthSecret' => 'SecondaryAuthSecret',
        'secondaryAuthServer' => 'SecondaryAuthServer',
        'shortPreamble' => 'ShortPreamble',
        'ssid' => 'Ssid',
        'ssidLb' => 'SsidLb',
        'type' => 'Type',
        'vlanDhcp' => 'VlanDhcp',
        'wmm' => 'Wmm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acctPort) {
            $res['AcctPort'] = $this->acctPort;
        }

        if (null !== $this->acctSecret) {
            $res['AcctSecret'] = $this->acctSecret;
        }

        if (null !== $this->acctServer) {
            $res['AcctServer'] = $this->acctServer;
        }

        if (null !== $this->apgroupId) {
            $res['ApgroupId'] = $this->apgroupId;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->authCache) {
            $res['AuthCache'] = $this->authCache;
        }

        if (null !== $this->authPort) {
            $res['AuthPort'] = $this->authPort;
        }

        if (null !== $this->authSecret) {
            $res['AuthSecret'] = $this->authSecret;
        }

        if (null !== $this->authServer) {
            $res['AuthServer'] = $this->authServer;
        }

        if (null !== $this->binding) {
            $res['Binding'] = $this->binding;
        }

        if (null !== $this->cir) {
            $res['Cir'] = $this->cir;
        }

        if (null !== $this->daeClient) {
            $res['DaeClient'] = $this->daeClient;
        }

        if (null !== $this->daePort) {
            $res['DaePort'] = $this->daePort;
        }

        if (null !== $this->daeSecret) {
            $res['DaeSecret'] = $this->daeSecret;
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->disassocLowAck) {
            $res['DisassocLowAck'] = $this->disassocLowAck;
        }

        if (null !== $this->disassocWeakRssi) {
            $res['DisassocWeakRssi'] = $this->disassocWeakRssi;
        }

        if (null !== $this->dynamicVlan) {
            $res['DynamicVlan'] = $this->dynamicVlan;
        }

        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }

        if (null !== $this->encKey) {
            $res['EncKey'] = $this->encKey;
        }

        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }

        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ieee80211w) {
            $res['Ieee80211w'] = $this->ieee80211w;
        }

        if (null !== $this->ignoreWeakProbe) {
            $res['IgnoreWeakProbe'] = $this->ignoreWeakProbe;
        }

        if (null !== $this->isolate) {
            $res['Isolate'] = $this->isolate;
        }

        if (null !== $this->liteEffect) {
            $res['LiteEffect'] = $this->liteEffect;
        }

        if (null !== $this->maxInactivity) {
            $res['MaxInactivity'] = $this->maxInactivity;
        }

        if (null !== $this->maxassoc) {
            $res['Maxassoc'] = $this->maxassoc;
        }

        if (null !== $this->multicastForward) {
            $res['MulticastForward'] = $this->multicastForward;
        }

        if (null !== $this->nasid) {
            $res['Nasid'] = $this->nasid;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->newSsid) {
            $res['NewSsid'] = $this->newSsid;
        }

        if (null !== $this->ownip) {
            $res['Ownip'] = $this->ownip;
        }

        if (null !== $this->secondaryAcctPort) {
            $res['SecondaryAcctPort'] = $this->secondaryAcctPort;
        }

        if (null !== $this->secondaryAcctSecret) {
            $res['SecondaryAcctSecret'] = $this->secondaryAcctSecret;
        }

        if (null !== $this->secondaryAcctServer) {
            $res['SecondaryAcctServer'] = $this->secondaryAcctServer;
        }

        if (null !== $this->secondaryAuthPort) {
            $res['SecondaryAuthPort'] = $this->secondaryAuthPort;
        }

        if (null !== $this->secondaryAuthSecret) {
            $res['SecondaryAuthSecret'] = $this->secondaryAuthSecret;
        }

        if (null !== $this->secondaryAuthServer) {
            $res['SecondaryAuthServer'] = $this->secondaryAuthServer;
        }

        if (null !== $this->shortPreamble) {
            $res['ShortPreamble'] = $this->shortPreamble;
        }

        if (null !== $this->ssid) {
            $res['Ssid'] = $this->ssid;
        }

        if (null !== $this->ssidLb) {
            $res['SsidLb'] = $this->ssidLb;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vlanDhcp) {
            $res['VlanDhcp'] = $this->vlanDhcp;
        }

        if (null !== $this->wmm) {
            $res['Wmm'] = $this->wmm;
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
        if (isset($map['AcctPort'])) {
            $model->acctPort = $map['AcctPort'];
        }

        if (isset($map['AcctSecret'])) {
            $model->acctSecret = $map['AcctSecret'];
        }

        if (isset($map['AcctServer'])) {
            $model->acctServer = $map['AcctServer'];
        }

        if (isset($map['ApgroupId'])) {
            $model->apgroupId = $map['ApgroupId'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AuthCache'])) {
            $model->authCache = $map['AuthCache'];
        }

        if (isset($map['AuthPort'])) {
            $model->authPort = $map['AuthPort'];
        }

        if (isset($map['AuthSecret'])) {
            $model->authSecret = $map['AuthSecret'];
        }

        if (isset($map['AuthServer'])) {
            $model->authServer = $map['AuthServer'];
        }

        if (isset($map['Binding'])) {
            $model->binding = $map['Binding'];
        }

        if (isset($map['Cir'])) {
            $model->cir = $map['Cir'];
        }

        if (isset($map['DaeClient'])) {
            $model->daeClient = $map['DaeClient'];
        }

        if (isset($map['DaePort'])) {
            $model->daePort = $map['DaePort'];
        }

        if (isset($map['DaeSecret'])) {
            $model->daeSecret = $map['DaeSecret'];
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['DisassocLowAck'])) {
            $model->disassocLowAck = $map['DisassocLowAck'];
        }

        if (isset($map['DisassocWeakRssi'])) {
            $model->disassocWeakRssi = $map['DisassocWeakRssi'];
        }

        if (isset($map['DynamicVlan'])) {
            $model->dynamicVlan = $map['DynamicVlan'];
        }

        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }

        if (isset($map['EncKey'])) {
            $model->encKey = $map['EncKey'];
        }

        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }

        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ieee80211w'])) {
            $model->ieee80211w = $map['Ieee80211w'];
        }

        if (isset($map['IgnoreWeakProbe'])) {
            $model->ignoreWeakProbe = $map['IgnoreWeakProbe'];
        }

        if (isset($map['Isolate'])) {
            $model->isolate = $map['Isolate'];
        }

        if (isset($map['LiteEffect'])) {
            $model->liteEffect = $map['LiteEffect'];
        }

        if (isset($map['MaxInactivity'])) {
            $model->maxInactivity = $map['MaxInactivity'];
        }

        if (isset($map['Maxassoc'])) {
            $model->maxassoc = $map['Maxassoc'];
        }

        if (isset($map['MulticastForward'])) {
            $model->multicastForward = $map['MulticastForward'];
        }

        if (isset($map['Nasid'])) {
            $model->nasid = $map['Nasid'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['NewSsid'])) {
            $model->newSsid = $map['NewSsid'];
        }

        if (isset($map['Ownip'])) {
            $model->ownip = $map['Ownip'];
        }

        if (isset($map['SecondaryAcctPort'])) {
            $model->secondaryAcctPort = $map['SecondaryAcctPort'];
        }

        if (isset($map['SecondaryAcctSecret'])) {
            $model->secondaryAcctSecret = $map['SecondaryAcctSecret'];
        }

        if (isset($map['SecondaryAcctServer'])) {
            $model->secondaryAcctServer = $map['SecondaryAcctServer'];
        }

        if (isset($map['SecondaryAuthPort'])) {
            $model->secondaryAuthPort = $map['SecondaryAuthPort'];
        }

        if (isset($map['SecondaryAuthSecret'])) {
            $model->secondaryAuthSecret = $map['SecondaryAuthSecret'];
        }

        if (isset($map['SecondaryAuthServer'])) {
            $model->secondaryAuthServer = $map['SecondaryAuthServer'];
        }

        if (isset($map['ShortPreamble'])) {
            $model->shortPreamble = $map['ShortPreamble'];
        }

        if (isset($map['Ssid'])) {
            $model->ssid = $map['Ssid'];
        }

        if (isset($map['SsidLb'])) {
            $model->ssidLb = $map['SsidLb'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VlanDhcp'])) {
            $model->vlanDhcp = $map['VlanDhcp'];
        }

        if (isset($map['Wmm'])) {
            $model->wmm = $map['Wmm'];
        }

        return $model;
    }
}
