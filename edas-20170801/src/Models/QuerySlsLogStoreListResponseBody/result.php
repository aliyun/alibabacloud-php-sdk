<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QuerySlsLogStoreListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $consumerSide;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'link'         => 'Link',
        'createTime'   => 'CreateTime',
        'logstore'     => 'Logstore',
        'consumerSide' => 'ConsumerSide',
        'project'      => 'Project',
        'source'       => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->consumerSide) {
            $res['ConsumerSide'] = $this->consumerSide;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['ConsumerSide'])) {
            $model->consumerSide = $map['ConsumerSide'];
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
