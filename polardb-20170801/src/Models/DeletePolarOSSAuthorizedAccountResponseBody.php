<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeletePolarOSSAuthorizedAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $authorizedUserArnIds;

    /**
     * @var string
     */
    public $authorizedUserIds;

    /**
     * @var string
     */
    public $pfsInstanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizedUserArnIds' => 'AuthorizedUserArnIds',
        'authorizedUserIds' => 'AuthorizedUserIds',
        'pfsInstanceId' => 'PfsInstanceId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedUserArnIds) {
            $res['AuthorizedUserArnIds'] = $this->authorizedUserArnIds;
        }

        if (null !== $this->authorizedUserIds) {
            $res['AuthorizedUserIds'] = $this->authorizedUserIds;
        }

        if (null !== $this->pfsInstanceId) {
            $res['PfsInstanceId'] = $this->pfsInstanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AuthorizedUserArnIds'])) {
            $model->authorizedUserArnIds = $map['AuthorizedUserArnIds'];
        }

        if (isset($map['AuthorizedUserIds'])) {
            $model->authorizedUserIds = $map['AuthorizedUserIds'];
        }

        if (isset($map['PfsInstanceId'])) {
            $model->pfsInstanceId = $map['PfsInstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
