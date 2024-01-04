<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class website extends Model
{
    /**
     * @description Specifies whether to automatically scroll up and down the screen to load a page. 0: No. 1: Yes. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $automaticScrolling;

    /**
     * @description Specifies whether to create a custom header. 0: No. 1: The first packet is modified. 2: All packets are modified. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $customHeader;

    /**
     * @description The custom header. Format: JSON map.
     *
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @description 域名（例如www.aliyun.com）解析时，解析出的IP地址或者CNAME不在DNS劫持白名单内，用户就会访问失败或者返回一个非Aliyun的目标IP；若解析结果中的IP或者CNAME在DNS白名单内，则会被认定为没有发生DNS劫持。
     *
     * 填写格式：域名:匹配规则。匹配规则支持IP、IP通配符、子网掩码和CNAME，可以填写多个匹配规则，多个匹配规则以竖线（|）隔开。例如：www.aliyun.com:203.0.3.55|203.3.44.67，表示www.aliyun.com域名下除203.0.3.55和203.3.44.67之外的其他IP都是被劫持的。
     * @example www.aliyun.com:203.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $DNSHijackWhitelist;

    /**
     * @description Specifies whether to disable the cache. 0: No. 1: Yes. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $disableCache;

    /**
     * @description Specifies whether to accept compressed files based on the HTTP Accept-Encoding request header. 0: No. 1: Yes. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $disableCompression;

    /**
     * @description 在页面加载过程中如果出现元素黑名单中配置的元素，不会请求加载该元素 。
     *
     * @example www.example.com/a.jpg
     *
     * @var string
     */
    public $elementBlacklist;

    /**
     * @description Specifies whether to exclude invalid IP addresses.
     *
     *   1: No
     *   0: Yes
     *
     * @example 0
     *
     * @var int
     */
    public $filterInvalidIP;

    /**
     * @description 识别元素：设置浏览页面元素总个数。
     *
     * @example 0
     *
     * @var int
     */
    public $flowHijackJumpTimes;

    /**
     * @description 劫持标识：设置匹配的关键信息。填写劫持判断关键字或关键元素，允许带星号（*）。
     *
     * @example aliyun
     *
     * @var string
     */
    public $flowHijackLogo;

    /**
     * @description Specifies whether to ignore SSL certificate errors during browsing. 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateError;

    /**
     * @description The monitoring timeout period. Unit: milliseconds. Default value: 20000. Minimum value: 5000. Maximum value: 300000.
     *
     * @example 20000
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description 监测页面出现了域名设置之外的元素都属于页面被篡改。常见的表现形式为弹出广告、浮动广告、跳转等。
     *
     * 填写格式：域名:元素。元素支持填写通配符，可以填写多个元素，多个元素以竖线（|）隔开。例如：www.aliyun.com:|/cc/bb/a.gif|/vv/bb/cc.jpg，表示www.aliyun.com域名下除基础文档、/cc/bb/a.gif和/vv/bb/cc.jpg之外的其他元素都属于页面被篡改。
     * @example www.aliyun.com:|/cc/bb/a.gif|/vv/bb/cc.jpg
     *
     * @var string
     */
    public $pageTamper;

    /**
     * @description Specifies whether to continue browsing after redirection. 0: No, 1:Yes. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $redirection;

    /**
     * @description The time threshold that is used to define a slow element. Unit: milliseconds. Default value: 5000. Minimum value: 1. Maximum value: 300000.
     *
     * @example 5000
     *
     * @var int
     */
    public $slowElementThreshold;

    /**
     * @description The destination URL.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description 验证字符串即监测页面源代码中的某个任意字符串。若客户端返回的源码中包含任一黑名单中的字符串则报650验证字符串失败的错误。多个字符串以竖线（|）隔开。
     *
     * @example error
     *
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @description 验证字符串即监测页面源代码中的某个任意字符串。客户端返回的源码必须包含所有白名单中的字符串，否则报650验证字符串失败的错误。多个字符串以竖线（|）隔开。
     *
     * @example success
     *
     * @var string
     */
    public $verifyStringWhitelist;

    /**
     * @description The maximum waiting time. Unit: milliseconds. Default value: 5000. Minimum value: 5000. Maximum value: 300000.
     *
     * @example 5000
     *
     * @var int
     */
    public $waitCompletionTime;
    protected $_name = [
        'automaticScrolling'     => 'AutomaticScrolling',
        'customHeader'           => 'CustomHeader',
        'customHeaderContent'    => 'CustomHeaderContent',
        'DNSHijackWhitelist'     => 'DNSHijackWhitelist',
        'disableCache'           => 'DisableCache',
        'disableCompression'     => 'DisableCompression',
        'elementBlacklist'       => 'ElementBlacklist',
        'filterInvalidIP'        => 'FilterInvalidIP',
        'flowHijackJumpTimes'    => 'FlowHijackJumpTimes',
        'flowHijackLogo'         => 'FlowHijackLogo',
        'ignoreCertificateError' => 'IgnoreCertificateError',
        'monitorTimeout'         => 'MonitorTimeout',
        'pageTamper'             => 'PageTamper',
        'redirection'            => 'Redirection',
        'slowElementThreshold'   => 'SlowElementThreshold',
        'targetUrl'              => 'TargetUrl',
        'verifyStringBlacklist'  => 'VerifyStringBlacklist',
        'verifyStringWhitelist'  => 'VerifyStringWhitelist',
        'waitCompletionTime'     => 'WaitCompletionTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->automaticScrolling) {
            $res['AutomaticScrolling'] = $this->automaticScrolling;
        }
        if (null !== $this->customHeader) {
            $res['CustomHeader'] = $this->customHeader;
        }
        if (null !== $this->customHeaderContent) {
            $res['CustomHeaderContent'] = $this->customHeaderContent;
        }
        if (null !== $this->DNSHijackWhitelist) {
            $res['DNSHijackWhitelist'] = $this->DNSHijackWhitelist;
        }
        if (null !== $this->disableCache) {
            $res['DisableCache'] = $this->disableCache;
        }
        if (null !== $this->disableCompression) {
            $res['DisableCompression'] = $this->disableCompression;
        }
        if (null !== $this->elementBlacklist) {
            $res['ElementBlacklist'] = $this->elementBlacklist;
        }
        if (null !== $this->filterInvalidIP) {
            $res['FilterInvalidIP'] = $this->filterInvalidIP;
        }
        if (null !== $this->flowHijackJumpTimes) {
            $res['FlowHijackJumpTimes'] = $this->flowHijackJumpTimes;
        }
        if (null !== $this->flowHijackLogo) {
            $res['FlowHijackLogo'] = $this->flowHijackLogo;
        }
        if (null !== $this->ignoreCertificateError) {
            $res['IgnoreCertificateError'] = $this->ignoreCertificateError;
        }
        if (null !== $this->monitorTimeout) {
            $res['MonitorTimeout'] = $this->monitorTimeout;
        }
        if (null !== $this->pageTamper) {
            $res['PageTamper'] = $this->pageTamper;
        }
        if (null !== $this->redirection) {
            $res['Redirection'] = $this->redirection;
        }
        if (null !== $this->slowElementThreshold) {
            $res['SlowElementThreshold'] = $this->slowElementThreshold;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->verifyStringBlacklist) {
            $res['VerifyStringBlacklist'] = $this->verifyStringBlacklist;
        }
        if (null !== $this->verifyStringWhitelist) {
            $res['VerifyStringWhitelist'] = $this->verifyStringWhitelist;
        }
        if (null !== $this->waitCompletionTime) {
            $res['WaitCompletionTime'] = $this->waitCompletionTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return website
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutomaticScrolling'])) {
            $model->automaticScrolling = $map['AutomaticScrolling'];
        }
        if (isset($map['CustomHeader'])) {
            $model->customHeader = $map['CustomHeader'];
        }
        if (isset($map['CustomHeaderContent'])) {
            $model->customHeaderContent = $map['CustomHeaderContent'];
        }
        if (isset($map['DNSHijackWhitelist'])) {
            $model->DNSHijackWhitelist = $map['DNSHijackWhitelist'];
        }
        if (isset($map['DisableCache'])) {
            $model->disableCache = $map['DisableCache'];
        }
        if (isset($map['DisableCompression'])) {
            $model->disableCompression = $map['DisableCompression'];
        }
        if (isset($map['ElementBlacklist'])) {
            $model->elementBlacklist = $map['ElementBlacklist'];
        }
        if (isset($map['FilterInvalidIP'])) {
            $model->filterInvalidIP = $map['FilterInvalidIP'];
        }
        if (isset($map['FlowHijackJumpTimes'])) {
            $model->flowHijackJumpTimes = $map['FlowHijackJumpTimes'];
        }
        if (isset($map['FlowHijackLogo'])) {
            $model->flowHijackLogo = $map['FlowHijackLogo'];
        }
        if (isset($map['IgnoreCertificateError'])) {
            $model->ignoreCertificateError = $map['IgnoreCertificateError'];
        }
        if (isset($map['MonitorTimeout'])) {
            $model->monitorTimeout = $map['MonitorTimeout'];
        }
        if (isset($map['PageTamper'])) {
            $model->pageTamper = $map['PageTamper'];
        }
        if (isset($map['Redirection'])) {
            $model->redirection = $map['Redirection'];
        }
        if (isset($map['SlowElementThreshold'])) {
            $model->slowElementThreshold = $map['SlowElementThreshold'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['VerifyStringBlacklist'])) {
            $model->verifyStringBlacklist = $map['VerifyStringBlacklist'];
        }
        if (isset($map['VerifyStringWhitelist'])) {
            $model->verifyStringWhitelist = $map['VerifyStringWhitelist'];
        }
        if (isset($map['WaitCompletionTime'])) {
            $model->waitCompletionTime = $map['WaitCompletionTime'];
        }

        return $model;
    }
}
