<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateContainerConfigurationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example c627c157-560d-43ff-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The context path of the Tomcat container. The context path can be an empty string, a null WAR package name, a root directory, or other custom non-empty strings. It can contain letters, digits, hyphens (-), and underscores (\_). Take note of the following items:
     *
     *   If this parameter is not specified when you configure the application instance group, the configuration of the application is applied.
     *   If this parameter is not specified when you configure the Tomcat container for an application, the root directory `/` is used.
     *
     * @example /
     *
     * @var string
     */
    public $contextPath;

    /**
     * @description The ID of the application instance group.
     *
     *   If an ID is specified, this operation configures the Tomcat container for the specified application instance group.
     *   If you set this parameter to "", this operation configures the Tomcat container for the application.
     *
     * @example 8123db90-880f-**************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The application port number for the Tomcat container. Take note of the following items:
     *
     *   If this parameter is not specified when you configure the application instance group, the configuration of the application is applied.
     *   If this parameter is not specified when you configure the application, the default port 8080 is applied.
     *
     * @example 8080
     *
     * @var int
     */
    public $httpPort;

    /**
     * @description The maximum number of threads. Take note of the following items:
     *
     *   If this parameter is not specified when you configure the application instance group, the configuration of the application is applied.
     *   If this parameter is not specified when you configure the application, the default value 250 is applied.
     *
     * @example 20
     *
     * @var int
     */
    public $maxThreads;

    /**
     * @description The uniform resource identifier (URI) encoding scheme. Valid values: ISO-8859-1, GBK, GB2312, and UTF-8. Take note of the following items:
     *
     *   If this parameter is not specified when you configure the application instance group, the configuration of the application is applied.
     *   If this parameter is not specified when you configure the application, the default URI encoding scheme in the Tomcat container is applied.
     *
     * @example ISO-8859-1
     *
     * @var string
     */
    public $URIEncoding;

    /**
     * @description Specifies whether to use the encoding scheme specified in the request body for URI query parameters. Take note of the following items:
     *
     *   If this parameter is not specified when you configure the application instance group, the configuration of the application is applied.
     *   If this parameter is not specified when you configure the application, the default value false is applied.
     *
     * @example true
     *
     * @var bool
     */
    public $useBodyEncoding;
    protected $_name = [
        'appId'           => 'AppId',
        'contextPath'     => 'ContextPath',
        'groupId'         => 'GroupId',
        'httpPort'        => 'HttpPort',
        'maxThreads'      => 'MaxThreads',
        'URIEncoding'     => 'URIEncoding',
        'useBodyEncoding' => 'UseBodyEncoding',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->contextPath) {
            $res['ContextPath'] = $this->contextPath;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->maxThreads) {
            $res['MaxThreads'] = $this->maxThreads;
        }
        if (null !== $this->URIEncoding) {
            $res['URIEncoding'] = $this->URIEncoding;
        }
        if (null !== $this->useBodyEncoding) {
            $res['UseBodyEncoding'] = $this->useBodyEncoding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateContainerConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ContextPath'])) {
            $model->contextPath = $map['ContextPath'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['MaxThreads'])) {
            $model->maxThreads = $map['MaxThreads'];
        }
        if (isset($map['URIEncoding'])) {
            $model->URIEncoding = $map['URIEncoding'];
        }
        if (isset($map['UseBodyEncoding'])) {
            $model->useBodyEncoding = $map['UseBodyEncoding'];
        }

        return $model;
    }
}
