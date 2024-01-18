<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\ConfirmTransferInEmailResponseBody;

use AlibabaCloud\Tea\Model;

class successList extends Model
{
    /**
     * @var string[]
     */
    public $successDomain;
    protected $_name = [
        'successDomain' => 'SuccessDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->successDomain) {
            $res['SuccessDomain'] = $this->successDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuccessDomain'])) {
            if (!empty($map['SuccessDomain'])) {
                $model->successDomain = $map['SuccessDomain'];
            }
        }

        return $model;
    }
}
