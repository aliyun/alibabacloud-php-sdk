<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetHDMLastAliyunResourceSyncResultResponseBody\data\subResults;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string
     */
    public $results;
    /**
     * @var subResults
     */
    public $subResults;
    /**
     * @var string
     */
    public $syncStatus;
    protected $_name = [
        'errorMsg'   => 'ErrorMsg',
        'results'    => 'Results',
        'subResults' => 'SubResults',
        'syncStatus' => 'SyncStatus',
    ];

    public function validate()
    {
        if (null !== $this->subResults) {
            $this->subResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->results) {
            $res['Results'] = $this->results;
        }

        if (null !== $this->subResults) {
            $res['SubResults'] = null !== $this->subResults ? $this->subResults->toArray($noStream) : $this->subResults;
        }

        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
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
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['Results'])) {
            $model->results = $map['Results'];
        }

        if (isset($map['SubResults'])) {
            $model->subResults = subResults::fromMap($map['SubResults']);
        }

        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }

        return $model;
    }
}
