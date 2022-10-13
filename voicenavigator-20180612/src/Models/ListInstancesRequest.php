<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $nluServiceTypeListJsonString;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'nluServiceTypeListJsonString' => 'NluServiceTypeListJsonString',
        'pageNumber'                   => 'PageNumber',
        'pageSize'                     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nluServiceTypeListJsonString) {
            $res['NluServiceTypeListJsonString'] = $this->nluServiceTypeListJsonString;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NluServiceTypeListJsonString'])) {
            $model->nluServiceTypeListJsonString = $map['NluServiceTypeListJsonString'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
