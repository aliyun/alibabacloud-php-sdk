<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateSavedSearchRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $savedsearchName;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'displayName' => 'displayName',
        'logstore' => 'logstore',
        'savedsearchName' => 'savedsearchName',
        'searchQuery' => 'searchQuery',
        'topic' => 'topic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }

        if (null !== $this->savedsearchName) {
            $res['savedsearchName'] = $this->savedsearchName;
        }

        if (null !== $this->searchQuery) {
            $res['searchQuery'] = $this->searchQuery;
        }

        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }

        if (isset($map['savedsearchName'])) {
            $model->savedsearchName = $map['savedsearchName'];
        }

        if (isset($map['searchQuery'])) {
            $model->searchQuery = $map['searchQuery'];
        }

        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }

        return $model;
    }
}
