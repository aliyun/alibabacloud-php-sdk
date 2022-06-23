<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectResultResponseBody\resultList;

use AlibabaCloud\Tea\Model;

class ext extends Model
{
    /**
     * @var string
     */
    public $virusName;
    protected $_name = [
        'virusName' => 'VirusName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->virusName) {
            $res['VirusName'] = $this->virusName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VirusName'])) {
            $model->virusName = $map['VirusName'];
        }

        return $model;
    }
}
