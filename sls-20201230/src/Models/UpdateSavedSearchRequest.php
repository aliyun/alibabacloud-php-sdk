<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateSavedSearchRequest extends Model
{
    /**
     * @description The display name.
     *
     * @example displayname
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The name of the Logstore to which the saved search belongs.
     *
     * @example aliyun-test-logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @description The name of the saved search. The name must be 3 to 63 characters in length.
     *
     * @example savedsearch-name
     *
     * @var string
     */
    public $savedsearchName;

    /**
     * @description The search statement or the query statement of the saved search. A query statement consists of a search statement and an analytic statement in the Search statement|Analytic statement format.
     *
     * For more information, see Log search overview and Log analysis overview.
     * @example *|select date_format(__time__-__time__%60, \"%H:%i:%s\") as time, COUNT(*) as pv group by time
     *
     * @var string
     */
    public $searchQuery;

    /**
     * @description The topic of the logs.
     *
     * @example theme
     *
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
     * @return UpdateSavedSearchRequest
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
