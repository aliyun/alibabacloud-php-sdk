<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListInterventionDictionaryRelatedEntitiesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example D77D0DAF-790D-F5F5-A9C0-133738165014
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about each application and each query analysis rule. If no query analysis rule references the intervention dictionary, the value of the result parameter is an empty list.
     *
     * @var mixed[][]
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = $map['result'];
            }
        }

        return $model;
    }
}
