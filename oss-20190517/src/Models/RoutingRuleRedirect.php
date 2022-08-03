<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\RoutingRuleRedirect\mirrorHeaders;
use AlibabaCloud\Tea\Model;

class RoutingRuleRedirect extends Model
{
    /**
     * @var bool
     */
    public $enableReplacePrefix;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $httpRedirectCode;

    /**
     * @var bool
     */
    public $mirrorCheckMd5;

    /**
     * @var bool
     */
    public $mirrorFollowRedirect;

    /**
     * @var mirrorHeaders
     */
    public $mirrorHeaders;

    /**
     * @var bool
     */
    public $mirrorPassQueryString;

    /**
     * @var string
     */
    public $mirrorURL;

    /**
     * @var bool
     */
    public $passQueryString;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $redirectType;

    /**
     * @var string
     */
    public $replaceKeyPrefixWith;

    /**
     * @var string
     */
    public $replaceKeyWith;

    /**
     * @var string
     */
    public $transparentMirrorResponseCodes;
    protected $_name = [
        'enableReplacePrefix'            => 'EnableReplacePrefix',
        'hostName'                       => 'HostName',
        'httpRedirectCode'               => 'HttpRedirectCode',
        'mirrorCheckMd5'                 => 'MirrorCheckMd5',
        'mirrorFollowRedirect'           => 'MirrorFollowRedirect',
        'mirrorHeaders'                  => 'MirrorHeaders',
        'mirrorPassQueryString'          => 'MirrorPassQueryString',
        'mirrorURL'                      => 'MirrorURL',
        'passQueryString'                => 'PassQueryString',
        'protocol'                       => 'Protocol',
        'redirectType'                   => 'RedirectType',
        'replaceKeyPrefixWith'           => 'ReplaceKeyPrefixWith',
        'replaceKeyWith'                 => 'ReplaceKeyWith',
        'transparentMirrorResponseCodes' => 'TransparentMirrorResponseCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableReplacePrefix) {
            $res['EnableReplacePrefix'] = $this->enableReplacePrefix;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->httpRedirectCode) {
            $res['HttpRedirectCode'] = $this->httpRedirectCode;
        }
        if (null !== $this->mirrorCheckMd5) {
            $res['MirrorCheckMd5'] = $this->mirrorCheckMd5;
        }
        if (null !== $this->mirrorFollowRedirect) {
            $res['MirrorFollowRedirect'] = $this->mirrorFollowRedirect;
        }
        if (null !== $this->mirrorHeaders) {
            $res['MirrorHeaders'] = null !== $this->mirrorHeaders ? $this->mirrorHeaders->toMap() : null;
        }
        if (null !== $this->mirrorPassQueryString) {
            $res['MirrorPassQueryString'] = $this->mirrorPassQueryString;
        }
        if (null !== $this->mirrorURL) {
            $res['MirrorURL'] = $this->mirrorURL;
        }
        if (null !== $this->passQueryString) {
            $res['PassQueryString'] = $this->passQueryString;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->redirectType) {
            $res['RedirectType'] = $this->redirectType;
        }
        if (null !== $this->replaceKeyPrefixWith) {
            $res['ReplaceKeyPrefixWith'] = $this->replaceKeyPrefixWith;
        }
        if (null !== $this->replaceKeyWith) {
            $res['ReplaceKeyWith'] = $this->replaceKeyWith;
        }
        if (null !== $this->transparentMirrorResponseCodes) {
            $res['TransparentMirrorResponseCodes'] = $this->transparentMirrorResponseCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RoutingRuleRedirect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableReplacePrefix'])) {
            $model->enableReplacePrefix = $map['EnableReplacePrefix'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HttpRedirectCode'])) {
            $model->httpRedirectCode = $map['HttpRedirectCode'];
        }
        if (isset($map['MirrorCheckMd5'])) {
            $model->mirrorCheckMd5 = $map['MirrorCheckMd5'];
        }
        if (isset($map['MirrorFollowRedirect'])) {
            $model->mirrorFollowRedirect = $map['MirrorFollowRedirect'];
        }
        if (isset($map['MirrorHeaders'])) {
            $model->mirrorHeaders = mirrorHeaders::fromMap($map['MirrorHeaders']);
        }
        if (isset($map['MirrorPassQueryString'])) {
            $model->mirrorPassQueryString = $map['MirrorPassQueryString'];
        }
        if (isset($map['MirrorURL'])) {
            $model->mirrorURL = $map['MirrorURL'];
        }
        if (isset($map['PassQueryString'])) {
            $model->passQueryString = $map['PassQueryString'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RedirectType'])) {
            $model->redirectType = $map['RedirectType'];
        }
        if (isset($map['ReplaceKeyPrefixWith'])) {
            $model->replaceKeyPrefixWith = $map['ReplaceKeyPrefixWith'];
        }
        if (isset($map['ReplaceKeyWith'])) {
            $model->replaceKeyWith = $map['ReplaceKeyWith'];
        }
        if (isset($map['TransparentMirrorResponseCodes'])) {
            $model->transparentMirrorResponseCodes = $map['TransparentMirrorResponseCodes'];
        }

        return $model;
    }
}
