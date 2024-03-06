<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ListClientKeysRequest extends Model
{
    /**
     * @description The name of the application access point (AAP).
     *
     * @example aap_test
     *
     * @var string
     */
    public $aapName;
    protected $_name = [
        'aapName' => 'AapName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aapName) {
            $res['AapName'] = $this->aapName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AapName'])) {
            $model->aapName = $map['AapName'];
        }

        return $model;
    }
}
