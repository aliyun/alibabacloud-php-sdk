<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GenerateDynamicDictRequest extends Model
{
    /**
     * @var string
     */
    public $argKeywords;

    /**
     * @var string
     */
    public $domains;

    /**
     * @var string
     */
    public $names;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'argKeywords' => 'ArgKeywords',
        'domains' => 'Domains',
        'names' => 'Names',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->argKeywords) {
            $res['ArgKeywords'] = $this->argKeywords;
        }

        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }

        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgKeywords'])) {
            $model->argKeywords = $map['ArgKeywords'];
        }

        if (isset($map['Domains'])) {
            $model->domains = $map['Domains'];
        }

        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
