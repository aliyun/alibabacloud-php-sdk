<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QuerySystemEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class systemEntities extends Model
{
    /**
     * @var string
     */
    public $defaultQuestion;

    /**
     * @example @sys.geo-city
     *
     * @var string
     */
    public $entityCode;

    /**
     * @var string
     */
    public $entityName;
    protected $_name = [
        'defaultQuestion' => 'DefaultQuestion',
        'entityCode'      => 'EntityCode',
        'entityName'      => 'EntityName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultQuestion) {
            $res['DefaultQuestion'] = $this->defaultQuestion;
        }
        if (null !== $this->entityCode) {
            $res['EntityCode'] = $this->entityCode;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEntities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultQuestion'])) {
            $model->defaultQuestion = $map['DefaultQuestion'];
        }
        if (isset($map['EntityCode'])) {
            $model->entityCode = $map['EntityCode'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        return $model;
    }
}
