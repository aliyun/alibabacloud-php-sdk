<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceCustomDomain extends Model
{
    /**
     * @var string
     */
    public $cert;

    /**
     * @var int
     */
    public $date;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $privateZone;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'cert' => 'cert',
        'date' => 'date',
        'domain' => 'domain',
        'grafanaWorkspaceId' => 'grafanaWorkspaceId',
        'id' => 'id',
        'key' => 'key',
        'privateZone' => 'privateZone',
        'protocol' => 'protocol',
        'status' => 'status',
        'uri' => 'uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
