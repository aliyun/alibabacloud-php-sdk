<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunCTRegistrationResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $DUrl;

    /**
     * @var string
     */
    public $NUrl;
    protected $_name = [
        'DUrl' => 'DUrl',
        'NUrl' => 'NUrl',
    ];

    public function validate()
    {
        Model::validateRequired('DUrl', $this->DUrl, true);
        Model::validateRequired('NUrl', $this->NUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DUrl) {
            $res['DUrl'] = $this->DUrl;
        }
        if (null !== $this->NUrl) {
            $res['NUrl'] = $this->NUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DUrl'])) {
            $model->DUrl = $map['DUrl'];
        }
        if (isset($map['NUrl'])) {
            $model->NUrl = $map['NUrl'];
        }

        return $model;
    }
}
