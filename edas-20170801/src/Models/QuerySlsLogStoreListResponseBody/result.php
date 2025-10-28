<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $consumerSide;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'consumerSide' => 'ConsumerSide',
        'createTime' => 'CreateTime',
        'link' => 'Link',
        'logstore' => 'Logstore',
        'project' => 'Project',
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerSide) {
            $res['ConsumerSide'] = $this->consumerSide;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }

        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['ConsumerSide'])) {
            $model->consumerSide = $map['ConsumerSide'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }

        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
