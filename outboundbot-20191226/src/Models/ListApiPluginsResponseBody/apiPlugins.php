<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListApiPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class apiPlugins extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $draftedConfigJson;

    /**
     * @example 1666230851000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1641891940000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 7c0e5b5e-a839-4999-8301-2c7d07a1f16f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $publishedConfigJson;

    /**
     * @example Drafted
     *
     * @var string
     */
    public $status;

    /**
     * @example Function
     *
     * @var string
     */
    public $type;

    /**
     * @example e1a3c448-20cf-4586-8aa2-4cdca75f7c20
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'description' => 'Description',
        'draftedConfigJson' => 'DraftedConfigJson',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'publishedConfigJson' => 'PublishedConfigJson',
        'status' => 'Status',
        'type' => 'Type',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->draftedConfigJson) {
            $res['DraftedConfigJson'] = $this->draftedConfigJson;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publishedConfigJson) {
            $res['PublishedConfigJson'] = $this->publishedConfigJson;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiPlugins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DraftedConfigJson'])) {
            $model->draftedConfigJson = $map['DraftedConfigJson'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublishedConfigJson'])) {
            $model->publishedConfigJson = $map['PublishedConfigJson'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
