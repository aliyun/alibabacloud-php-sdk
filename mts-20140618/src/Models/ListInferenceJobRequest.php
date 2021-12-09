<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class ListInferenceJobRequest extends Model
{
    /**
     * @var int
     */
    public $maxPageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $serverName;
    protected $_name = [
        'maxPageSize' => 'MaxPageSize',
        'pageNumber'  => 'PageNumber',
        'serverName'  => 'ServerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxPageSize) {
            $res['MaxPageSize'] = $this->maxPageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInferenceJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxPageSize'])) {
            $model->maxPageSize = $map['MaxPageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        return $model;
    }
}
