<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateSimpleOfficeSiteResponse extends Model
{
    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'officeSiteId' => 'OfficeSiteId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSimpleOfficeSiteResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
