<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GenerateDynamicDictRequest extends Model
{
    /**
     * @description The keyword of the dictionary.
     *
     * @example keyword
     *
     * @var string
     */
    public $argKeywords;

    /**
     * @description The domain name for custom weak passwords.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $domains;

    /**
     * @description The company name for custom weak passwords.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $names;

    /**
     * @description The source IP address of the request.
     *
     * @example 58.248.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'argKeywords' => 'ArgKeywords',
        'domains' => 'Domains',
        'names' => 'Names',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GenerateDynamicDictRequest
     */
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
