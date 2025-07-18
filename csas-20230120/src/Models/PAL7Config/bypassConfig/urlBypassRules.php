<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config\bypassConfig;

use AlibabaCloud\Tea\Model;

class urlBypassRules extends Model
{
    /**
     * @var string[]
     */
    public $froms;

    /**
     * @var string[]
     */
    public $paths;
    protected $_name = [
        'froms' => 'Froms',
        'paths' => 'Paths',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->froms) {
            $res['Froms'] = $this->froms;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlBypassRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Froms'])) {
            if (!empty($map['Froms'])) {
                $model->froms = $map['Froms'];
            }
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }

        return $model;
    }
}
