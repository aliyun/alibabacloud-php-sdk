<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CmsEventForView extends Model
{
    /**
     * @var mixed[]
     */
    public $annotations;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var string
     */
    public $datacontenttype;

    /**
     * @var string
     */
    public $dataschema;

    /**
     * @var string
     */
    public $dedupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $integrationUuid;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var int
     */
    public $receiveTime;

    /**
     * @var EventResourceForEventView
     */
    public $resource;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcetype;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $subtype;

    /**
     * @var string
     */
    public $sysId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workspace;

    /**
     * @var mixed[]
     */
    public $workspaceTags;
    protected $_name = [
        'annotations' => 'annotations',
        'data' => 'data',
        'datacontenttype' => 'datacontenttype',
        'dataschema' => 'dataschema',
        'dedupId' => 'dedupId',
        'id' => 'id',
        'integrationUuid' => 'integrationUuid',
        'labels' => 'labels',
        'receiveTime' => 'receiveTime',
        'resource' => 'resource',
        'severity' => 'severity',
        'source' => 'source',
        'sourcetype' => 'sourcetype',
        'status' => 'status',
        'subject' => 'subject',
        'subtype' => 'subtype',
        'sysId' => 'sysId',
        'time' => 'time',
        'timestamp' => 'timestamp',
        'type' => 'type',
        'workspace' => 'workspace',
        'workspaceTags' => 'workspaceTags',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (\is_array($this->workspaceTags)) {
            Model::validateArray($this->workspaceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['annotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->datacontenttype) {
            $res['datacontenttype'] = $this->datacontenttype;
        }

        if (null !== $this->dataschema) {
            $res['dataschema'] = $this->dataschema;
        }

        if (null !== $this->dedupId) {
            $res['dedupId'] = $this->dedupId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->integrationUuid) {
            $res['integrationUuid'] = $this->integrationUuid;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->receiveTime) {
            $res['receiveTime'] = $this->receiveTime;
        }

        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourcetype) {
            $res['sourcetype'] = $this->sourcetype;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        if (null !== $this->subtype) {
            $res['subtype'] = $this->subtype;
        }

        if (null !== $this->sysId) {
            $res['sysId'] = $this->sysId;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
        }

        if (null !== $this->workspaceTags) {
            if (\is_array($this->workspaceTags)) {
                $res['workspaceTags'] = [];
                foreach ($this->workspaceTags as $key1 => $value1) {
                    $res['workspaceTags'][$key1] = $value1;
                }
            }
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
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                foreach ($map['annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['datacontenttype'])) {
            $model->datacontenttype = $map['datacontenttype'];
        }

        if (isset($map['dataschema'])) {
            $model->dataschema = $map['dataschema'];
        }

        if (isset($map['dedupId'])) {
            $model->dedupId = $map['dedupId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['integrationUuid'])) {
            $model->integrationUuid = $map['integrationUuid'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['receiveTime'])) {
            $model->receiveTime = $map['receiveTime'];
        }

        if (isset($map['resource'])) {
            $model->resource = EventResourceForEventView::fromMap($map['resource']);
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourcetype'])) {
            $model->sourcetype = $map['sourcetype'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        if (isset($map['subtype'])) {
            $model->subtype = $map['subtype'];
        }

        if (isset($map['sysId'])) {
            $model->sysId = $map['sysId'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        if (isset($map['workspaceTags'])) {
            if (!empty($map['workspaceTags'])) {
                $model->workspaceTags = [];
                foreach ($map['workspaceTags'] as $key1 => $value1) {
                    $model->workspaceTags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
