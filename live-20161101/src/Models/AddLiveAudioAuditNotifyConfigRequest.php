<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveAudioAuditNotifyConfigRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $callbackTemplate;
    protected $_name = [
        'domainName'       => 'DomainName',
        'callback'         => 'Callback',
        'callbackTemplate' => 'CallbackTemplate',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->callbackTemplate) {
            $res['CallbackTemplate'] = $this->callbackTemplate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAudioAuditNotifyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CallbackTemplate'])) {
            $model->callbackTemplate = $map['CallbackTemplate'];
        }

        return $model;
    }
}
