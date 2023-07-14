<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceCustomDomain extends Model
{
    /**
     * @example protocol为http时无需填写;
     *
     * @var string
     */
    public $cert;

    /**
     * @example 1688627798017
     *
     * @var int
     */
    public $date;

    /**
     * @example mydomain.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example grafana-cn-***********
     *
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example protocol为http时无需填写;
     *
     * @var string
     */
    public $key;

    /**
     * @example true
     *
     * @var string
     */
    public $privateZone;

    /**
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @example CreateSucceed
     *
     * @var string
     */
    public $status;

    /**
     * @example /
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'cert'               => 'cert',
        'date'               => 'date',
        'domain'             => 'domain',
        'grafanaWorkspaceId' => 'grafanaWorkspaceId',
        'id'                 => 'id',
        'key'                => 'key',
        'privateZone'        => 'privateZone',
        'protocol'           => 'protocol',
        'status'             => 'status',
        'uri'                => 'uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['cert'] = $this->cert;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->grafanaWorkspaceId) {
            $res['grafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->privateZone) {
            $res['privateZone'] = $this->privateZone;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->uri) {
            $res['uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceCustomDomain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert'])) {
            $model->cert = $map['cert'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['grafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['grafanaWorkspaceId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['privateZone'])) {
            $model->privateZone = $map['privateZone'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}
