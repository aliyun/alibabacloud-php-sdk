<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateMockRuleRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $extraJson;

    /**
     * @var string
     */
    public $scMockItemJson;

    /**
     * @var string
     */
    public $dubboMockItemJson;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'name'              => 'Name',
        'region'            => 'Region',
        'extraJson'         => 'ExtraJson',
        'scMockItemJson'    => 'ScMockItemJson',
        'dubboMockItemJson' => 'DubboMockItemJson',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->extraJson) {
            $res['ExtraJson'] = $this->extraJson;
        }
        if (null !== $this->scMockItemJson) {
            $res['ScMockItemJson'] = $this->scMockItemJson;
        }
        if (null !== $this->dubboMockItemJson) {
            $res['DubboMockItemJson'] = $this->dubboMockItemJson;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMockRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ExtraJson'])) {
            $model->extraJson = $map['ExtraJson'];
        }
        if (isset($map['ScMockItemJson'])) {
            $model->scMockItemJson = $map['ScMockItemJson'];
        }
        if (isset($map['DubboMockItemJson'])) {
            $model->dubboMockItemJson = $map['DubboMockItemJson'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
