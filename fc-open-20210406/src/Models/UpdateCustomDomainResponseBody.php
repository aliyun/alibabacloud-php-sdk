<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\CertConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\RouteConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\TLSConfig;

class UpdateCustomDomainResponseBody extends Model {
    protected $_name = [
        'accountId' => 'accountId',
        'apiVersion' => 'apiVersion',
        'certConfig' => 'certConfig',
        'createdTime' => 'createdTime',
        'domainName' => 'domainName',
        'lastModifiedTime' => 'lastModifiedTime',
        'protocol' => 'protocol',
        'routeConfig' => 'routeConfig',
        'tlsConfig' => 'tlsConfig',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->routeConfig) {
            $res['routeConfig'] = null !== $this->routeConfig ? $this->routeConfig->toMap() : null;
        }
        if (null !== $this->tlsConfig) {
            $res['tlsConfig'] = null !== $this->tlsConfig ? $this->tlsConfig->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateCustomDomainResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['accountId'])){
            $model->accountId = $map['accountId'];
        }
        if(isset($map['apiVersion'])){
            $model->apiVersion = $map['apiVersion'];
        }
        if(isset($map['certConfig'])){
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }
        if(isset($map['createdTime'])){
            $model->createdTime = $map['createdTime'];
        }
        if(isset($map['domainName'])){
            $model->domainName = $map['domainName'];
        }
        if(isset($map['lastModifiedTime'])){
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if(isset($map['protocol'])){
            $model->protocol = $map['protocol'];
        }
        if(isset($map['routeConfig'])){
            $model->routeConfig = RouteConfig::fromMap($map['routeConfig']);
        }
        if(isset($map['tlsConfig'])){
            $model->tlsConfig = TLSConfig::fromMap($map['tlsConfig']);
        }
        return $model;
    }
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var RouteConfig
     */
    public $routeConfig;

    /**
     * @var TLSConfig
     */
    public $tlsConfig;

}
