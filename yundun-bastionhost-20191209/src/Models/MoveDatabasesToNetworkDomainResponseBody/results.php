<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveDatabasesToNetworkDomainResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description Indicates whether the database is added to the network domain.
     *
     * > The code LICENSE_OUT_OF_LIMIT indicates that the network domain feature is not supported by the current Bastionhost edition.
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The database ID.
     *
     * @example 45
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The error message that is returned.
     *
     * @example N/A
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'       => 'Code',
        'databaseId' => 'DatabaseId',
        'message'    => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
