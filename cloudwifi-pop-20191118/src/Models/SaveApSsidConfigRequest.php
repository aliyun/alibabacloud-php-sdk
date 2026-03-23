<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SaveApSsidConfigRequest extends Model
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
     * @var int
     */
    public $acctStatusServerWork;

    /**
     * @var int
     */
    public $apAssetId;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $arpProxyEnable;

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
     * @var int
     */
    public $authStatusServerWork;

    /**
     * @var int
     */
    public $cir;

    /**
     * @var int
     */
    public $cirStep;

    /**
     * @var int
     */
    public $cirType;

    /**
     * @var int
     */
    public $cirUl;

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
     * @var string
     */
    public $encKey;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var int
     */
    public $fourthAuthPort;

    /**
     * @var string
     */
    public $fourthAuthSecret;

    /**
     * @var string
     */
    public $fourthAuthServer;

    /**
     * @var int
     */
    public $ftOverDs;

    /**
     * @var string
     */
    public $hidden;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ieee80211r;

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
     * @var string
     */
    public $mac;

    /**
     * @var int
     */
    public $maxInactivity;

    /**
     * @var int
     */
    public $maxassoc;

    /**
     * @var string
     */
    public $mobilityDomain;

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
    public $ndProxyWork;

    /**
     * @var int
     */
    public $network;

    /**
     * @var string
     */
    public $ownip;

    /**
     * @var string
     */
    public $radioIndex;

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
     * @var bool
     */
    public $sendConfigToAp;

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
    public $thirdAuthPort;

    /**
     * @var string
     */
    public $thirdAuthSecret;

    /**
     * @var string
     */
    public $thirdAuthServer;

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
        'acctStatusServerWork' => 'AcctStatusServerWork',
        'apAssetId' => 'ApAssetId',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'arpProxyEnable' => 'ArpProxyEnable',
        'authCache' => 'AuthCache',
        'authPort' => 'AuthPort',
        'authSecret' => 'AuthSecret',
        'authServer' => 'AuthServer',
        'authStatusServerWork' => 'AuthStatusServerWork',
        'cir' => 'Cir',
        'cirStep' => 'CirStep',
        'cirType' => 'CirType',
        'cirUl' => 'CirUl',
        'daeClient' => 'DaeClient',
        'daePort' => 'DaePort',
        'daeSecret' => 'DaeSecret',
        'disabled' => 'Disabled',
        'disassocLowAck' => 'DisassocLowAck',
        'disassocWeakRssi' => 'DisassocWeakRssi',
        'dynamicVlan' => 'DynamicVlan',
        'encKey' => 'EncKey',
        'encryption' => 'Encryption',
        'fourthAuthPort' => 'FourthAuthPort',
        'fourthAuthSecret' => 'FourthAuthSecret',
        'fourthAuthServer' => 'FourthAuthServer',
        'ftOverDs' => 'FtOverDs',
        'hidden' => 'Hidden',
        'id' => 'Id',
        'ieee80211r' => 'Ieee80211r',
        'ieee80211w' => 'Ieee80211w',
        'ignoreWeakProbe' => 'IgnoreWeakProbe',
        'isolate' => 'Isolate',
        'liteEffect' => 'LiteEffect',
        'mac' => 'Mac',
        'maxInactivity' => 'MaxInactivity',
        'maxassoc' => 'Maxassoc',
        'mobilityDomain' => 'MobilityDomain',
        'multicastForward' => 'MulticastForward',
        'nasid' => 'Nasid',
        'ndProxyWork' => 'NdProxyWork',
        'network' => 'Network',
        'ownip' => 'Ownip',
        'radioIndex' => 'RadioIndex',
        'secondaryAcctPort' => 'SecondaryAcctPort',
        'secondaryAcctSecret' => 'SecondaryAcctSecret',
        'secondaryAcctServer' => 'SecondaryAcctServer',
        'secondaryAuthPort' => 'SecondaryAuthPort',
        'secondaryAuthSecret' => 'SecondaryAuthSecret',
        'secondaryAuthServer' => 'SecondaryAuthServer',
        'sendConfigToAp' => 'SendConfigToAp',
        'shortPreamble' => 'ShortPreamble',
        'ssid' => 'Ssid',
        'ssidLb' => 'SsidLb',
        'thirdAuthPort' => 'ThirdAuthPort',
        'thirdAuthSecret' => 'ThirdAuthSecret',
        'thirdAuthServer' => 'ThirdAuthServer',
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

        if (null !== $this->acctStatusServerWork) {
            $res['AcctStatusServerWork'] = $this->acctStatusServerWork;
        }

        if (null !== $this->apAssetId) {
            $res['ApAssetId'] = $this->apAssetId;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->arpProxyEnable) {
            $res['ArpProxyEnable'] = $this->arpProxyEnable;
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

        if (null !== $this->authStatusServerWork) {
            $res['AuthStatusServerWork'] = $this->authStatusServerWork;
        }

        if (null !== $this->cir) {
            $res['Cir'] = $this->cir;
        }

        if (null !== $this->cirStep) {
            $res['CirStep'] = $this->cirStep;
        }

        if (null !== $this->cirType) {
            $res['CirType'] = $this->cirType;
        }

        if (null !== $this->cirUl) {
            $res['CirUl'] = $this->cirUl;
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

        if (null !== $this->encKey) {
            $res['EncKey'] = $this->encKey;
        }

        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }

        if (null !== $this->fourthAuthPort) {
            $res['FourthAuthPort'] = $this->fourthAuthPort;
        }

        if (null !== $this->fourthAuthSecret) {
            $res['FourthAuthSecret'] = $this->fourthAuthSecret;
        }

        if (null !== $this->fourthAuthServer) {
            $res['FourthAuthServer'] = $this->fourthAuthServer;
        }

        if (null !== $this->ftOverDs) {
            $res['FtOverDs'] = $this->ftOverDs;
        }

        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ieee80211r) {
            $res['Ieee80211r'] = $this->ieee80211r;
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

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->maxInactivity) {
            $res['MaxInactivity'] = $this->maxInactivity;
        }

        if (null !== $this->maxassoc) {
            $res['Maxassoc'] = $this->maxassoc;
        }

        if (null !== $this->mobilityDomain) {
            $res['MobilityDomain'] = $this->mobilityDomain;
        }

        if (null !== $this->multicastForward) {
            $res['MulticastForward'] = $this->multicastForward;
        }

        if (null !== $this->nasid) {
            $res['Nasid'] = $this->nasid;
        }

        if (null !== $this->ndProxyWork) {
            $res['NdProxyWork'] = $this->ndProxyWork;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->ownip) {
            $res['Ownip'] = $this->ownip;
        }

        if (null !== $this->radioIndex) {
            $res['RadioIndex'] = $this->radioIndex;
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

        if (null !== $this->sendConfigToAp) {
            $res['SendConfigToAp'] = $this->sendConfigToAp;
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

        if (null !== $this->thirdAuthPort) {
            $res['ThirdAuthPort'] = $this->thirdAuthPort;
        }

        if (null !== $this->thirdAuthSecret) {
            $res['ThirdAuthSecret'] = $this->thirdAuthSecret;
        }

        if (null !== $this->thirdAuthServer) {
            $res['ThirdAuthServer'] = $this->thirdAuthServer;
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

        if (isset($map['AcctStatusServerWork'])) {
            $model->acctStatusServerWork = $map['AcctStatusServerWork'];
        }

        if (isset($map['ApAssetId'])) {
            $model->apAssetId = $map['ApAssetId'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ArpProxyEnable'])) {
            $model->arpProxyEnable = $map['ArpProxyEnable'];
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

        if (isset($map['AuthStatusServerWork'])) {
            $model->authStatusServerWork = $map['AuthStatusServerWork'];
        }

        if (isset($map['Cir'])) {
            $model->cir = $map['Cir'];
        }

        if (isset($map['CirStep'])) {
            $model->cirStep = $map['CirStep'];
        }

        if (isset($map['CirType'])) {
            $model->cirType = $map['CirType'];
        }

        if (isset($map['CirUl'])) {
            $model->cirUl = $map['CirUl'];
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

        if (isset($map['EncKey'])) {
            $model->encKey = $map['EncKey'];
        }

        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }

        if (isset($map['FourthAuthPort'])) {
            $model->fourthAuthPort = $map['FourthAuthPort'];
        }

        if (isset($map['FourthAuthSecret'])) {
            $model->fourthAuthSecret = $map['FourthAuthSecret'];
        }

        if (isset($map['FourthAuthServer'])) {
            $model->fourthAuthServer = $map['FourthAuthServer'];
        }

        if (isset($map['FtOverDs'])) {
            $model->ftOverDs = $map['FtOverDs'];
        }

        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ieee80211r'])) {
            $model->ieee80211r = $map['Ieee80211r'];
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

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['MaxInactivity'])) {
            $model->maxInactivity = $map['MaxInactivity'];
        }

        if (isset($map['Maxassoc'])) {
            $model->maxassoc = $map['Maxassoc'];
        }

        if (isset($map['MobilityDomain'])) {
            $model->mobilityDomain = $map['MobilityDomain'];
        }

        if (isset($map['MulticastForward'])) {
            $model->multicastForward = $map['MulticastForward'];
        }

        if (isset($map['Nasid'])) {
            $model->nasid = $map['Nasid'];
        }

        if (isset($map['NdProxyWork'])) {
            $model->ndProxyWork = $map['NdProxyWork'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['Ownip'])) {
            $model->ownip = $map['Ownip'];
        }

        if (isset($map['RadioIndex'])) {
            $model->radioIndex = $map['RadioIndex'];
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

        if (isset($map['SendConfigToAp'])) {
            $model->sendConfigToAp = $map['SendConfigToAp'];
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

        if (isset($map['ThirdAuthPort'])) {
            $model->thirdAuthPort = $map['ThirdAuthPort'];
        }

        if (isset($map['ThirdAuthSecret'])) {
            $model->thirdAuthSecret = $map['ThirdAuthSecret'];
        }

        if (isset($map['ThirdAuthServer'])) {
            $model->thirdAuthServer = $map['ThirdAuthServer'];
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
