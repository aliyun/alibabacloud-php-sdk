<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class SavedSearch extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $logstore;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $savedsearchName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $searchQuery;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'displayName'     => 'displayName',
        'logstore'        => 'logstore',
        'savedsearchName' => 'savedsearchName',
        'searchQuery'     => 'searchQuery',
        'topic'           => 'topic',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SavedSearch
     */
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
