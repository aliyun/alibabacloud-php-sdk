<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ListSecretVersionIdsRequest extends Model
{
    /**
     * @var string
     */
    public $includeDeprecated;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $secretName;
    protected $_name = [
        'includeDeprecated' => 'IncludeDeprecated',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'secretName'        => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->includeDeprecated) {
            $res['IncludeDeprecated'] = $this->includeDeprecated;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretVersionIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncludeDeprecated'])) {
            $model->includeDeprecated = $map['IncludeDeprecated'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
