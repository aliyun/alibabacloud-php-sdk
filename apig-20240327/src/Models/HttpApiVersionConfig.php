<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class HttpApiVersionConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example my-version
     *
     * @var string
     */
    public $headerName;

    /**
     * @example myVersion
     *
     * @var string
     */
    public $queryName;

    /**
     * @example Query
     *
     * @var string
     */
    public $scheme;

    /**
     * @example v1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'enable'     => 'enable',
        'headerName' => 'headerName',
        'queryName'  => 'queryName',
        'scheme'     => 'scheme',
        'version'    => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->headerName) {
            $res['headerName'] = $this->headerName;
        }
        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }
        if (null !== $this->scheme) {
            $res['scheme'] = $this->scheme;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpApiVersionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['headerName'])) {
            $model->headerName = $map['headerName'];
        }
        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }
        if (isset($map['scheme'])) {
            $model->scheme = $map['scheme'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
