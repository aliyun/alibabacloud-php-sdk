<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsoleAccessWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $disableWhitelist;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'disableWhitelist' => 'DisableWhitelist',
        'lang'             => 'Lang',
        'sourceCode'       => 'SourceCode',
        'sourceIp'         => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableWhitelist) {
            $res['DisableWhitelist'] = $this->disableWhitelist;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConsoleAccessWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableWhitelist'])) {
            $model->disableWhitelist = $map['DisableWhitelist'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
