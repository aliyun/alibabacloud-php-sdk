<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ListSecretVersionIdsRequest extends Model
{
    /**
     * @description Specifies whether to return deprecated secret versions.
     *
     * Valid values:
     *
     *   false: no
     *   true: yes
     *
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $includeDeprecated;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the secret.
     *
     * This parameter is required.
     * @example secret001
     *
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
